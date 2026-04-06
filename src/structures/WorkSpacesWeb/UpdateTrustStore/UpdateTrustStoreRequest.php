<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string|resource|\Psr\Http\Message\StreamInterface>|null $certificatesToAdd
 * @property list<string>|null $certificatesToDelete
 * @property string|null $clientToken
 * @property string $trustStoreArn
 */
class UpdateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     certificatesToAdd?: list<string|resource|\Psr\Http\Message\StreamInterface>|null,
     *     certificatesToDelete?: list<string>|null,
     *     clientToken?: string|null,
     *     trustStoreArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
