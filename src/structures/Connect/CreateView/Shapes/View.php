<?php

namespace Sunaoka\Aws\Structures\Connect\CreateView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property 'PUBLISHED'|'SAVED' $Status
 * @property 'CUSTOMER_MANAGED'|'AWS_MANAGED' $Type
 * @property string $Description
 * @property int $Version
 * @property string $VersionDescription
 * @property ViewContent $Content
 * @property array<string, string> $Tags
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $ViewContentSha256
 */
class View extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Arn?: string,
     *     Name?: string,
     *     Status?: 'PUBLISHED'|'SAVED',
     *     Type?: 'CUSTOMER_MANAGED'|'AWS_MANAGED',
     *     Description?: string,
     *     Version?: int,
     *     VersionDescription?: string,
     *     Content?: ViewContent,
     *     Tags?: array<string, string>,
     *     CreatedTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     ViewContentSha256?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
