<?php

namespace Sunaoka\Aws\Structures\ElementalInference\CreateQuestionSetVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\YesNoQuestion>|null $yesNo
 * @property list<Shapes\YesNoPerOptionQuestion>|null $yesNoPerOption
 * @property list<Shapes\ChooseOneQuestion>|null $chooseOne
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property string $version
 * @property string|null $description
 * @property string|null $latestVersion
 * @property string $sha256
 * @property list<string>|null $references
 * @property array<string, string>|null $tags
 */
class CreateQuestionSetVersionResponse extends Response
{
}
