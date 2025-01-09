<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DescribeCustomVocabularyMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property string $localeId
 */
class DescribeCustomVocabularyMetadataRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     localeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
