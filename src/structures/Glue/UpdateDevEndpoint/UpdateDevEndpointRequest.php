<?php

namespace Sunaoka\Aws\Structures\Glue\UpdateDevEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $PublicKey
 * @property list<string> $AddPublicKeys
 * @property list<string> $DeletePublicKeys
 * @property Shapes\DevEndpointCustomLibraries $CustomLibraries
 * @property bool $UpdateEtlLibraries
 * @property list<string> $DeleteArguments
 * @property array<string, string> $AddArguments
 */
class UpdateDevEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     PublicKey?: string,
     *     AddPublicKeys?: list<string>,
     *     DeletePublicKeys?: list<string>,
     *     CustomLibraries?: Shapes\DevEndpointCustomLibraries,
     *     UpdateEtlLibraries?: bool,
     *     DeleteArguments?: list<string>,
     *     AddArguments?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
