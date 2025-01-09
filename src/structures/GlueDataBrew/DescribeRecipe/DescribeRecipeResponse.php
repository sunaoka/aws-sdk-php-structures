<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\DescribeRecipe;

use Sunaoka\Aws\Structures\Response;

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
 * @property list<Shapes\RecipeStep> $Steps
 * @property array<string, string> $Tags
 * @property string $ResourceArn
 * @property string $RecipeVersion
 */
class DescribeRecipeResponse extends Response
{
}
