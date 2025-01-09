<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DeleteExternalModel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $modelEndpoint
 */
class DeleteExternalModelRequest extends Request
{
    /**
     * @param array{modelEndpoint: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
