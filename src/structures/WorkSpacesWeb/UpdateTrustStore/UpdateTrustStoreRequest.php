<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\UpdateTrustStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string|resource|\Psr\Http\Message\StreamInterface> $certificatesToAdd
 * @property list<string> $certificatesToDelete
 * @property string $clientToken
 * @property string $trustStoreArn
 */
class UpdateTrustStoreRequest extends Request
{
    /**
     * @param array{
     *     certificatesToAdd?: list<string|resource|\Psr\Http\Message\StreamInterface>,
     *     certificatesToDelete?: list<string>,
     *     clientToken?: string,
     *     trustStoreArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
