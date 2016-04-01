<?php
/**
 * Created by PhpStorm.
 * User: Steve Curran
 * Date: 23/03/2016
 * Time: 15:02
 */

namespace Itb;


use Mattsmithdev\PdoCrud\DatabaseTable;

class Member extends DatabaseTable
{
    private $studentId;
    private $currentBeltGrade;
    private $currentStatus;
    private $nextGrad;
    private $nextBeltGradeSyllabus;
    private $requireStatus;

    /**
     * @return mixed
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * @param mixed $studentId
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    }

    /**
     * @return mixed
     */
    public function getCurrentBeltGrade()
    {
        return $this->currentBeltGrade;
    }

    /**
     * @param mixed $currentBeltGrade
     */
    public function setCurrentBeltGrade($currentBeltGrade)
    {
        $this->currentBeltGrade = $currentBeltGrade;
    }

    /**
     * @return mixed
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * @param mixed $currentStatus
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->currentStatus = $currentStatus;
    }

    /**
     * @return mixed
     */
    public function getNextGrad()
    {
        return $this->nextGrad;
    }

    /**
     * @param mixed $nextGrad
     */
    public function setNextGrad($nextGrad)
    {
        $this->nextGrad = $nextGrad;
    }

    /**
     * @return mixed
     */
    public function getNextBeltGradeSyllabus()
    {
        return $this->nextBeltGradeSyllabus;
    }

    /**
     * @param mixed $nextBeltGradeSyllabus
     */
    public function setNextBeltGradeSyllabus($nextBeltGradeSyllabus)
    {
        $this->nextBeltGradeSyllabus = $nextBeltGradeSyllabus;
    }

    /**
     * @return mixed
     */
    public function getRequireStatus()
    {
        return $this->requireStatus;
    }

    /**
     * @param mixed $requireStatus
     */
    public function setRequireStatus($requireStatus)
    {
        $this->requireStatus = $requireStatus;
    }



}