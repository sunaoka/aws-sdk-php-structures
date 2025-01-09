<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CreateDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datastoreName
 * @property string $clientToken
 * @property array<string, string> $tags
 * @property string $kmsKeyArn
 */
class CreateDatastoreRequest extends Request
{
    /**
     * @param array{
     *     datastoreName?: string,
     *     clientToken: string,
     *     tags?: array<string, string>,
     *     kmsKeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
