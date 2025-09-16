<?php

namespace Sunaoka\Aws\Structures\MedicalImaging\CreateDatastore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $datastoreName
 * @property string $clientToken
 * @property array<string, string>|null $tags
 * @property string|null $kmsKeyArn
 * @property string|null $lambdaAuthorizerArn
 */
class CreateDatastoreRequest extends Request
{
    /**
     * @param array{
     *     datastoreName?: string|null,
     *     clientToken: string,
     *     tags?: array<string, string>|null,
     *     kmsKeyArn?: string|null,
     *     lambdaAuthorizerArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
