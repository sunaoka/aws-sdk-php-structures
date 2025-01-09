<?php

namespace Sunaoka\Aws\Structures\Emr\ListStudios\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StudioId
 * @property string $Name
 * @property string $VpcId
 * @property string $Description
 * @property string $Url
 * @property 'SSO'|'IAM' $AuthMode
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class StudioSummary extends Shape
{
    /**
     * @param array{
     *     StudioId?: string,
     *     Name?: string,
     *     VpcId?: string,
     *     Description?: string,
     *     Url?: string,
     *     AuthMode?: 'SSO'|'IAM',
     *     CreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
