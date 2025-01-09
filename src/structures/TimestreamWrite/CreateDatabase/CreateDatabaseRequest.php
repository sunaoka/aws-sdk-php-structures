<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string $KmsKeyId
 * @property list<Shapes\Tag> $Tags
 */
class CreateDatabaseRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     KmsKeyId?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
