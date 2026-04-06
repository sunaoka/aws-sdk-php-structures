<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\EnableOperatorApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property 'iam'|'idc'|'idp' $authFlow
 * @property string $operatorAppRoleArn
 * @property string|null $idcInstanceArn
 * @property string|null $issuerUrl
 * @property string|null $idpClientId
 * @property string|null $idpClientSecret
 * @property string|null $provider
 */
class EnableOperatorAppRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     authFlow: 'iam'|'idc'|'idp',
     *     operatorAppRoleArn: string,
     *     idcInstanceArn?: string|null,
     *     issuerUrl?: string|null,
     *     idpClientId?: string|null,
     *     idpClientSecret?: string|null,
     *     provider?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
