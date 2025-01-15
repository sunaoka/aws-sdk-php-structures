<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateDatabase;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatabaseName
 * @property string|null $KmsKeyId
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDatabaseRequest extends Request
{
    /**
     * @param array{
     *     DatabaseName: string,
     *     KmsKeyId?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
