<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateContinuousBackups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TableName
 * @property Shapes\PointInTimeRecoverySpecification $PointInTimeRecoverySpecification
 */
class UpdateContinuousBackupsRequest extends Request
{
    /**
     * @param array{
     *     TableName: string,
     *     PointInTimeRecoverySpecification: Shapes\PointInTimeRecoverySpecification
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
