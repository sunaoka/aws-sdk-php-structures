<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceIdentifier
 * @property 'cluster'|'cluster-parameter-group'|'cluster-security-group'|'cluster-snapshot'|'scheduled-action' $SourceType
 * @property string $Message
 * @property list<string> $EventCategories
 * @property string $Severity
 * @property \Aws\Api\DateTimeResult $Date
 * @property string $EventId
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceIdentifier?: string,
     *     SourceType?: 'cluster'|'cluster-parameter-group'|'cluster-security-group'|'cluster-snapshot'|'scheduled-action',
     *     Message?: string,
     *     EventCategories?: list<string>,
     *     Severity?: string,
     *     Date?: \Aws\Api\DateTimeResult,
     *     EventId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
