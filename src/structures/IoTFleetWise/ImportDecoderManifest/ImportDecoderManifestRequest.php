<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\ImportDecoderManifest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property list<Shapes\NetworkFileDefinition> $networkFileDefinitions
 */
class ImportDecoderManifestRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     networkFileDefinitions: list<Shapes\NetworkFileDefinition>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
