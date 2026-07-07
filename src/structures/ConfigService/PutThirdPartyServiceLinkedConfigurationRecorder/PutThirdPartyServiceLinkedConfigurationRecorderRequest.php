<?php

namespace Sunaoka\Aws\Structures\ConfigService\PutThirdPartyServiceLinkedConfigurationRecorder;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ServicePrincipal
 * @property string $ConnectorArn
 * @property Shapes\ScopeConfiguration $ScopeConfiguration
 * @property list<Shapes\Tag>|null $Tags
 */
class PutThirdPartyServiceLinkedConfigurationRecorderRequest extends Request
{
    /**
     * @param array{
     *     ServicePrincipal: string,
     *     ConnectorArn: string,
     *     ScopeConfiguration: Shapes\ScopeConfiguration,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
