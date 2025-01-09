<?php

namespace Sunaoka\Aws\Structures\ECRPublic\PutRepositoryCatalogData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property Shapes\RepositoryCatalogDataInput $catalogData
 */
class PutRepositoryCatalogDataRequest extends Request
{
    /**
     * @param array{
     *     registryId?: string,
     *     repositoryName: string,
     *     catalogData: Shapes\RepositoryCatalogDataInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
