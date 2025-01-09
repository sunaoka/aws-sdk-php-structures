<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 * @property 'rsa'|'ed25519' $KeyType
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property 'pem'|'ppk' $KeyFormat
 * @property bool $DryRun
 */
class CreateKeyPairRequest extends Request
{
    /**
     * @param array{
     *     KeyName: string,
     *     KeyType?: 'rsa'|'ed25519',
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     KeyFormat?: 'pem'|'ppk',
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
