<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AliasArn
 * @property string $Name
 * @property string $FunctionVersion
 * @property string $Description
 * @property Shapes\AliasRoutingConfiguration $RoutingConfig
 * @property string $RevisionId
 */
class UpdateAliasResponse extends Response
{
}
