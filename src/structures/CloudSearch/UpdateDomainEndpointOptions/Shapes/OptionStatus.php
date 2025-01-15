<?php

namespace Sunaoka\Aws\Structures\CloudSearch\UpdateDomainEndpointOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $CreationDate
 * @property \Aws\Api\DateTimeResult $UpdateDate
 * @property int<0, max>|null $UpdateVersion
 * @property 'RequiresIndexDocuments'|'Processing'|'Active'|'FailedToValidate' $State
 * @property bool|null $PendingDeletion
 */
class OptionStatus extends Shape
{
    /**
     * @param array{
     *     CreationDate: \Aws\Api\DateTimeResult,
     *     UpdateDate: \Aws\Api\DateTimeResult,
     *     UpdateVersion?: int<0, max>|null,
     *     State: 'RequiresIndexDocuments'|'Processing'|'Active'|'FailedToValidate',
     *     PendingDeletion?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
