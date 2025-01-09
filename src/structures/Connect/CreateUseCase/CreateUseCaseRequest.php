<?php

namespace Sunaoka\Aws\Structures\Connect\CreateUseCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $IntegrationAssociationId
 * @property 'RULES_EVALUATION'|'CONNECT_CAMPAIGNS' $UseCaseType
 * @property array<string, string> $Tags
 */
class CreateUseCaseRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IntegrationAssociationId: string,
     *     UseCaseType: 'RULES_EVALUATION'|'CONNECT_CAMPAIGNS',
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
