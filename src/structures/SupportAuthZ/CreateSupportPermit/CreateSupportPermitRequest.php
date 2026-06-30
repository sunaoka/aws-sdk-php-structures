<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\CreateSupportPermit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\Permit $permit
 * @property string $name
 * @property string|null $description
 * @property Shapes\SigningKeyInfo $signingKeyInfo
 * @property string|null $supportCaseDisplayId
 * @property string|null $clientToken
 * @property array<string, string>|null $tags
 */
class CreateSupportPermitRequest extends Request
{
    /**
     * @param array{
     *     permit: Shapes\Permit,
     *     name: string,
     *     description?: string|null,
     *     signingKeyInfo: Shapes\SigningKeyInfo,
     *     supportCaseDisplayId?: string|null,
     *     clientToken?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
