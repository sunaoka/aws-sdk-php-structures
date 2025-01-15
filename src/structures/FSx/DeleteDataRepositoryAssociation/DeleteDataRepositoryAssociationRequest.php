<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteDataRepositoryAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property string|null $ClientRequestToken
 * @property bool|null $DeleteDataInFileSystem
 */
class DeleteDataRepositoryAssociationRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     ClientRequestToken?: string|null,
     *     DeleteDataInFileSystem?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
