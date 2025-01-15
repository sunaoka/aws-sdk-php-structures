<?php

namespace Sunaoka\Aws\Structures\Emr\ListStudios\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StudioId
 * @property string|null $Name
 * @property string|null $VpcId
 * @property string|null $Description
 * @property string|null $Url
 * @property 'SSO'|'IAM'|null $AuthMode
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 */
class StudioSummary extends Shape
{
    /**
     * @param array{
     *     StudioId?: string|null,
     *     Name?: string|null,
     *     VpcId?: string|null,
     *     Description?: string|null,
     *     Url?: string|null,
     *     AuthMode?: 'SSO'|'IAM'|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
