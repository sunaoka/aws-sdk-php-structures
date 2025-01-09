<?php

namespace Sunaoka\Aws\Structures\MTurk\AssociateQualificationWithWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property string $WorkerId
 * @property int $IntegerValue
 * @property bool $SendNotification
 */
class AssociateQualificationWithWorkerRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     WorkerId: string,
     *     IntegerValue?: int,
     *     SendNotification?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
