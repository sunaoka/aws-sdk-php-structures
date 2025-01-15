<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DeleteRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $registryId
 * @property string $repositoryName
 * @property bool|null $force
 */
class DeleteRepositoryRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string|null,
     *     repositoryName: string,
     *     force?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
