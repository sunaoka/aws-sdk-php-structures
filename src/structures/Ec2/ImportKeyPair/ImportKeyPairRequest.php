<?php

namespace Sunaoka\Aws\Structures\Ec2\ImportKeyPair;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 * @property string $KeyName
 * @property string|resource|\Psr\Http\Message\StreamInterface $PublicKeyMaterial
 */
class ImportKeyPairRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null,
     *     KeyName: string,
     *     PublicKeyMaterial: string|resource|\Psr\Http\Message\StreamInterface
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
