<?php

namespace Sunaoka\Aws\Structures\ECRPublic\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property Shapes\RepositoryCatalogDataInput|null $catalogData
 * @property list<Shapes\Tag>|null $tags
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     catalogData?: Shapes\RepositoryCatalogDataInput|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
