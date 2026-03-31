<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\EnableOperatorApp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentSpaceId
 * @property Shapes\IamAuthConfiguration|null $iam
 * @property Shapes\IdcAuthConfiguration|null $idc
 * @property Shapes\IdpAuthConfiguration|null $idp
 */
class EnableOperatorAppResponse extends Response
{
}
