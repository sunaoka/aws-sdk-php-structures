<?php

namespace Sunaoka\Aws\Structures\FSx\DeleteDataRepositoryAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationId
 * @property string $ClientRequestToken
 * @property bool $DeleteDataInFileSystem
 */
class DeleteDataRepositoryAssociationRequest extends Request
{
    /**
     * @param array{
     *     AssociationId: string,
     *     ClientRequestToken?: string,
     *     DeleteDataInFileSystem?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
