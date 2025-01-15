<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListRecipes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $CreateDate
 * @property string|null $LastModifiedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedDate
 * @property string|null $ProjectName
 * @property string|null $PublishedBy
 * @property \Aws\Api\DateTimeResult|null $PublishedDate
 * @property string|null $Description
 * @property string $Name
 * @property string|null $ResourceArn
 * @property list<RecipeStep>|null $Steps
 * @property array<string, string>|null $Tags
 * @property string|null $RecipeVersion
 */
class Recipe extends Shape
{
    /**
     * @param array{
     *     CreatedBy?: string|null,
     *     CreateDate?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedBy?: string|null,
     *     LastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     ProjectName?: string|null,
     *     PublishedBy?: string|null,
     *     PublishedDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Name: string,
     *     ResourceArn?: string|null,
     *     Steps?: list<RecipeStep>|null,
     *     Tags?: array<string, string>|null,
     *     RecipeVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
