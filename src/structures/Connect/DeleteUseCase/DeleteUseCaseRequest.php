<?php

namespace Sunaoka\Aws\Structures\Connect\DeleteUseCase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $IntegrationAssociationId
 * @property string $UseCaseId
 */
class DeleteUseCaseRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     IntegrationAssociationId: string,
     *     UseCaseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
