<?php

namespace Sunaoka\Aws\Structures\Lambda\CreateAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AliasArn
 * @property string|null $Name
 * @property string|null $FunctionVersion
 * @property string|null $Description
 * @property Shapes\AliasRoutingConfiguration|null $RoutingConfig
 * @property string|null $RevisionId
 */
class CreateAliasResponse extends Response
{
}
