<?php

namespace Sunaoka\Aws\Structures\Omics\UpdateSequenceStore;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property string $name
 * @property string $description
 * @property string $clientToken
 * @property string $fallbackLocation
 * @property list<string> $propagatedSetLevelTags
 * @property Shapes\S3AccessConfig $s3AccessConfig
 */
class UpdateSequenceStoreRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     name?: string,
     *     description?: string,
     *     clientToken?: string,
     *     fallbackLocation?: string,
     *     propagatedSetLevelTags?: list<string>,
     *     s3AccessConfig?: Shapes\S3AccessConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
