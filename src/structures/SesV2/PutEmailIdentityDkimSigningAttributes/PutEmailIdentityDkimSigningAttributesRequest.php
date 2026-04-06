<?php

namespace Sunaoka\Aws\Structures\SesV2\PutEmailIdentityDkimSigningAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EmailIdentity
 * @property 'AWS_SES'|'EXTERNAL' $SigningAttributesOrigin
 * @property Shapes\DkimSigningAttributes|null $SigningAttributes
 */
class PutEmailIdentityDkimSigningAttributesRequest extends Request
{
    /**
     * @param array{
     *     EmailIdentity: string,
     *     SigningAttributesOrigin: 'AWS_SES'|'EXTERNAL',
     *     SigningAttributes?: Shapes\DkimSigningAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
