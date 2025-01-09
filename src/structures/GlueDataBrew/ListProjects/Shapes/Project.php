<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListProjects\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $CreatedBy
 * @property string $DatasetName
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $LastModifiedBy
 * @property string $Name
 * @property string $RecipeName
 * @property string $ResourceArn
 * @property Sample $Sample
 * @property array<string, string> $Tags
 * @property string $RoleArn
 * @property string $OpenedBy
 * @property \Aws\Api\DateTimeResult $OpenDate
 */
class Project extends Shape
{
    /**
     * @param array{
     *     AccountId?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     CreatedBy?: string,
     *     DatasetName?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: string,
     *     Name: string,
     *     RecipeName: string,
     *     ResourceArn?: string,
     *     Sample?: Sample,
     *     Tags?: array<string, string>,
     *     RoleArn?: string,
     *     OpenedBy?: string,
     *     OpenDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
