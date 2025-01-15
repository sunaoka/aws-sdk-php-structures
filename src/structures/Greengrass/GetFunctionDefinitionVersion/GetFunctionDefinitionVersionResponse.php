<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetFunctionDefinitionVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $CreationTimestamp
 * @property Shapes\FunctionDefinitionVersion|null $Definition
 * @property string|null $Id
 * @property string|null $NextToken
 * @property string|null $Version
 */
class GetFunctionDefinitionVersionResponse extends Response
{
}
