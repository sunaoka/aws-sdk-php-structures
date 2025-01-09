<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property Shapes\GetSolVnfInfo $instantiatedVnfInfo
 * @property 'INSTANTIATED'|'NOT_INSTANTIATED' $instantiationState
 * @property Shapes\GetSolFunctionInstanceMetadata $metadata
 * @property string $nsInstanceId
 * @property array<string, string> $tags
 * @property string $vnfPkgId
 * @property string $vnfProductName
 * @property string $vnfProvider
 * @property string $vnfdId
 * @property string $vnfdVersion
 */
class GetSolFunctionInstanceResponse extends Response
{
}
