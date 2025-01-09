<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\CreateAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS' $type
 * @property list<Shapes\InlineArchiveRule> $archiveRules
 * @property array<string, string> $tags
 * @property string $clientToken
 * @property Shapes\AnalyzerConfiguration $configuration
 */
class CreateAnalyzerRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     type: 'ACCOUNT'|'ORGANIZATION'|'ACCOUNT_UNUSED_ACCESS'|'ORGANIZATION_UNUSED_ACCESS',
     *     archiveRules?: list<Shapes\InlineArchiveRule>,
     *     tags?: array<string, string>,
     *     clientToken?: string,
     *     configuration?: Shapes\AnalyzerConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
