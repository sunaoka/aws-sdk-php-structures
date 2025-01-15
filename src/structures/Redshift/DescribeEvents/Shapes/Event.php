<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceIdentifier
 * @property 'cluster'|'cluster-parameter-group'|'cluster-security-group'|'cluster-snapshot'|'scheduled-action'|null $SourceType
 * @property string|null $Message
 * @property list<string>|null $EventCategories
 * @property string|null $Severity
 * @property \Aws\Api\DateTimeResult|null $Date
 * @property string|null $EventId
 */
class Event extends Shape
{
    /**
     * @param array{
     *     SourceIdentifier?: string|null,
     *     SourceType?: 'cluster'|'cluster-parameter-group'|'cluster-security-group'|'cluster-snapshot'|'scheduled-action'|null,
     *     Message?: string|null,
     *     EventCategories?: list<string>|null,
     *     Severity?: string|null,
     *     Date?: \Aws\Api\DateTimeResult|null,
     *     EventId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
