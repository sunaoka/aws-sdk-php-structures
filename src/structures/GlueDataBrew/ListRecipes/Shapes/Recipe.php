<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRecipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CreatedBy
 * @property \Aws\Api\DateTimeResult $CreateDate
 * @property string $LastModifiedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedDate
 * @property string $ProjectName
 * @property string $PublishedBy
 * @property \Aws\Api\DateTimeResult $PublishedDate
 * @property string $Description
 * @property string $Name
 * @property string $ResourceArn
 * @property list<RecipeStep> $Steps
 * @property array<string, string> $Tags
 * @property string $RecipeVersion
 */
class Recipe extends Shape
{
    /**
     * @param array{
     *     CreatedBy?: string,
     *     CreateDate?: \Aws\Api\DateTimeResult,
     *     LastModifiedBy?: string,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult,
     *     ProjectName?: string,
     *     PublishedBy?: string,
     *     PublishedDate?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Name: string,
     *     ResourceArn?: string,
     *     Steps?: list<RecipeStep>,
     *     Tags?: array<string, string>,
     *     RecipeVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
