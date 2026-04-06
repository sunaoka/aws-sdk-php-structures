<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetBrowserSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'Cults'|'Gambling'|'Nudity'|'Pornography'|'SexEducation'|'Tasteless'|'Violence'|'DownloadSites'|'ImageSharing'|'PeerToPeer'|'StreamingMediaAndDownloads'|'GenerativeAI'|'CriminalActivity'|'Hacking'|'HateAndIntolerance'|'IllegalDrug'|'IllegalSoftware'|'SchoolCheating'|'SelfHarm'|'Weapons'|'Chat'|'Games'|'InstantMessaging'|'ProfessionalNetwork'|'SocialNetworking'|'WebBasedEmail'|'ParkedDomains'>|null $blockedCategories
 * @property list<string>|null $allowedUrls
 * @property list<string>|null $blockedUrls
 */
class WebContentFilteringPolicy extends Shape
{
    /**
     * @param array{
     *     blockedCategories?: list<'Cults'|'Gambling'|'Nudity'|'Pornography'|'SexEducation'|'Tasteless'|'Violence'|'DownloadSites'|'ImageSharing'|'PeerToPeer'|'StreamingMediaAndDownloads'|'GenerativeAI'|'CriminalActivity'|'Hacking'|'HateAndIntolerance'|'IllegalDrug'|'IllegalSoftware'|'SchoolCheating'|'SelfHarm'|'Weapons'|'Chat'|'Games'|'InstantMessaging'|'ProfessionalNetwork'|'SocialNetworking'|'WebBasedEmail'|'ParkedDomains'>|null,
     *     allowedUrls?: list<string>|null,
     *     blockedUrls?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
