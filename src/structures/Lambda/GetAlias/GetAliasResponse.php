<?php

namespace Sunaoka\Aws\Structures\Lambda\GetAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AliasArn
 * @property string $Name
 * @property string $FunctionVersion
 * @property string $Description
 * @property Shapes\AliasRoutingConfiguration $RoutingConfig
 * @property string $RevisionId
 */
class GetAliasResponse extends Response
{
}
