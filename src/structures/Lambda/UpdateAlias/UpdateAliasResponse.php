<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateAlias;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AliasArn
 * @property string|null $Name
 * @property string|null $FunctionVersion
 * @property string|null $Description
 * @property Shapes\AliasRoutingConfiguration|null $RoutingConfig
 * @property string|null $RevisionId
 */
class UpdateAliasResponse extends Response
{
}
