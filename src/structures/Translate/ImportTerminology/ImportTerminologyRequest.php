<?php

namespace Sunaoka\Aws\Structures\Translate\ImportTerminology;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'OVERWRITE' $MergeStrategy
 * @property string $Description
 * @property Shapes\TerminologyData $TerminologyData
 * @property Shapes\EncryptionKey $EncryptionKey
 * @property list<Shapes\Tag> $Tags
 */
class ImportTerminologyRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     MergeStrategy: 'OVERWRITE',
     *     Description?: string,
     *     TerminologyData: Shapes\TerminologyData,
     *     EncryptionKey?: Shapes\EncryptionKey,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
