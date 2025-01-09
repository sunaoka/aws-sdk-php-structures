<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\DeleteDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 */
class DeleteDatastoreRequest extends Request
{
    /**
     * @param array{datastoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
