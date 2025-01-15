<?php

namespace Sunaoka\Aws\Structures\Proton\GetRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $connectionArn
 * @property string|null $encryptionKey
 * @property string $name
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET' $provider
 */
class Repository extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     connectionArn: string,
     *     encryptionKey?: string|null,
     *     name: string,
     *     provider: 'GITHUB'|'GITHUB_ENTERPRISE'|'BITBUCKET'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
