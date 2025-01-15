<?php

namespace Sunaoka\Aws\Structures\MTurk\AssociateQualificationWithWorker;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QualificationTypeId
 * @property string $WorkerId
 * @property int|null $IntegerValue
 * @property bool|null $SendNotification
 */
class AssociateQualificationWithWorkerRequest extends Request
{
    /**
     * @param array{
     *     QualificationTypeId: string,
     *     WorkerId: string,
     *     IntegerValue?: int|null,
     *     SendNotification?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
