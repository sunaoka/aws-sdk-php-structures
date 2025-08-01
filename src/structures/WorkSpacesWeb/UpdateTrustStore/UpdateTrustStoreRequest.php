<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $trustStoreArn
 * @property list<string|resource|\Psr\Http\Message\StreamInterface>|null $certificatesToAdd
 * @property list<string>|null $certificatesToDelete
 * @property string|null $clientToken
 */
class UpdateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     trustStoreArn: string,
     *     certificatesToAdd?: list<string|resource|\Psr\Http\Message\StreamInterface>|null,
     *     certificatesToDelete?: list<string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
