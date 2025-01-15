<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityDkimAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property bool|null $SigningEnabled
 */
class PutEmailIdentityDkimAttributesRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     SigningEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
