<?php

namespace Sunaoka\Aws\Structures\ECRPublic\CreateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property Shapes\RepositoryCatalogDataInput $catalogData
 * @property list<Shapes\Tag> $tags
 */
class CreateRepositoryRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     catalogData?: Shapes\RepositoryCatalogDataInput,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
