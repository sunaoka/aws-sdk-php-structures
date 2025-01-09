<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\GetDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreId
 */
class GetDatastoreRequest extends Request
{
    /**
     * @param array{datastoreId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
