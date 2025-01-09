<?php

namespace Sunaoka\Aws\Structures\CodeGuruReviewer\DisassociateRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AssociationArn
 */
class DisassociateRepositoryRequest extends Request
{
    /**
     * @param array{AssociationArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
