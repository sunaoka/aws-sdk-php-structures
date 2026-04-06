<?php

namespace Sunaoka\Aws\Structures\Connect\CreateView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property 'PUBLISHED'|'SAVED'|null $Status
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null $Type
 * @property string|null $Description
 * @property int|null $Version
 * @property string|null $VersionDescription
 * @property ViewContent|null $Content
 * @property array<string, string>|null $Tags
 * @property \Aws\Api\DateTimeResult|null $CreatedTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $ViewContentSha256
 */
class View extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Arn?: string|null,
     *     Name?: string|null,
     *     Status?: 'PUBLISHED'|'SAVED'|null,
     *     Type?: 'CUSTOMER_MANAGED'|'AWS_MANAGED'|null,
     *     Description?: string|null,
     *     Version?: int|null,
     *     VersionDescription?: string|null,
     *     Content?: ViewContent|null,
     *     Tags?: array<string, string>|null,
     *     CreatedTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     ViewContentSha256?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
