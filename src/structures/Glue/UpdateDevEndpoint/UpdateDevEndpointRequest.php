<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDevEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string|null $PublicKey
 * @property list<string>|null $AddPublicKeys
 * @property list<string>|null $DeletePublicKeys
 * @property Shapes\DevEndpointCustomLibraries|null $CustomLibraries
 * @property bool|null $UpdateEtlLibraries
 * @property list<string>|null $DeleteArguments
 * @property array<string, string>|null $AddArguments
 */
class UpdateDevEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     PublicKey?: string|null,
     *     AddPublicKeys?: list<string>|null,
     *     DeletePublicKeys?: list<string>|null,
     *     CustomLibraries?: Shapes\DevEndpointCustomLibraries|null,
     *     UpdateEtlLibraries?: bool|null,
     *     DeleteArguments?: list<string>|null,
     *     AddArguments?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
