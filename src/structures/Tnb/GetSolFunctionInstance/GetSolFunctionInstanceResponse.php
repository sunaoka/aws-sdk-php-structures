<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolFunctionInstance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $id
 * @property Shapes\GetSolVnfInfo|null $instantiatedVnfInfo
 * @property 'INSTANTIATED'|'NOT_INSTANTIATED' $instantiationState
 * @property Shapes\GetSolFunctionInstanceMetadata $metadata
 * @property string $nsInstanceId
 * @property array<string, string>|null $tags
 * @property string $vnfPkgId
 * @property string|null $vnfProductName
 * @property string|null $vnfProvider
 * @property string $vnfdId
 * @property string|null $vnfdVersion
 */
class GetSolFunctionInstanceResponse extends Response
{
}
