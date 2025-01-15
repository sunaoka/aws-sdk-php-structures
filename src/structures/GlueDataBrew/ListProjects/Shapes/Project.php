<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $CreatedBy
 * @property string|null $DatasetName
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $LastModifiedBy
 * @property string $Name
 * @property string $RecipeName
 * @property string|null $ResourceArn
 * @property Sample|null $Sample
 * @property array<string, string>|null $Tags
 * @property string|null $RoleArn
 * @property string|null $OpenedBy
 * @property \Aws\Api\DateTimeResult|null $OpenDate
 */
class Project extends Shape
{
    /**
     * @param array{
     *     AccountId?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: string|null,
     *     DatasetName?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: string|null,
     *     Name: string,
     *     RecipeName: string,
     *     ResourceArn?: string|null,
     *     Sample?: Sample|null,
     *     Tags?: array<string, string>|null,
     *     RoleArn?: string|null,
     *     OpenedBy?: string|null,
     *     OpenDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
