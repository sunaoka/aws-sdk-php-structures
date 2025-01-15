<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRecipe;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\RecipeStep>|null $Steps
 * @property array<string, string>|null $Tags
 * @property string|null $ResourceArn
 * @property string|null $RecipeVersion
 */
class DescribeRecipeResponse extends Response
{
}
