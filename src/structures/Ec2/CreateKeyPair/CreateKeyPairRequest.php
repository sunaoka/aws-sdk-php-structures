<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyName
 * @property 'rsa'|'ed25519'|null $KeyType
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property 'pem'|'ppk'|null $KeyFormat
 * @property bool|null $DryRun
 */
class CreateKeyPairRequest extends Request
{
    /**
     * @param array{
     *     KeyName: string,
     *     KeyType?: 'rsa'|'ed25519'|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     KeyFormat?: 'pem'|'ppk'|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
